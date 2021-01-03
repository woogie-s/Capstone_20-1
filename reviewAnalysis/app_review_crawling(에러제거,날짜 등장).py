#!/usr/bin/env python
# coding: utf-8

# ### **App review Crawling**
# * target page URL : https://play.google.com/store/apps/collection/cluster?clp=SiYKGgoUdG9wc2VsbGluZ19mcmVlX0dBTUUQBxgDEgRHQU1FOgIIAg%3D%3D:S:ANO1ljIKXNI&gsr=CihKJgoaChR0b3BzZWxsaW5nX2ZyZWVfR0FNRRAHGAMSBEdBTUU6AggC:S:ANO1ljLQ85c
# * 구글 게임 인기차트 앱들의 리뷰를 크롤링
# * Author : devKya
# * date : 2020.04.19

# In[1]:


import os
import time
import re 

# 파일 저장 방식
import xlsxwriter
import pandas as pd

from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.support import expected_conditions as EC

from bs4 import BeautifulSoup


# In[7]:


# headless Options & headless mode에서 Click Error 방지를 위한 Option 추가.
options = Options()
options.add_argument('--headless')
options.add_argument('--window-size=1920,1080')
options.add_argument('--start-maximized')

# webdriver
# browser headless mode
# browser = webdriver.Chrome('./MyCode/webdriver/chrome/chromedriver.exe', options=options)
browser = webdriver.Chrome('C:/capstone/chromedriver')

# page size
browser.maximize_window()

# page 이동
url = 'https://play.google.com/store/apps/collection/cluster?clp=0g4cChoKFHRvcHNlbGxpbmdfZnJlZV9HQU1FEAcYAw%3D%3D:S:ANO1ljJ_Y5U&gsr=Ch_SDhwKGgoUdG9wc2VsbGluZ19mcmVlX0dBTUUQBxgD:S:ANO1ljL4b8c'
browser.get(url)
time.sleep(1)

# scroll down function 선언
# return : None
def scroll(browser):
    last_height = browser.execute_script('return document.body.scrollHeight')
    while True:
        browser.execute_script('window.scrollTo(0, document.body.scrollHeight);')
        # error가 발생시 time.sleep 조정
        time.sleep(1)

        new_height = browser.execute_script('return document.body.scrollHeight')
        if new_height == last_height:
            break
        last_height = new_height


# agter review scroll, 더보기 click function 선언 
# return : review page sourse 
def more_button_click(browser):
    n = 0
    while True:
        time.sleep(3)
        scroll(browser)
        time.sleep(4)
        soup_review = BeautifulSoup(browser.page_source, 'html.parser')
        
        if soup_review.select_one('span.RveJvd.snByac') is not None:
            # 정수 수정하여 횟수 변경 가능
            if n == 135:
                return soup_review
            time.sleep(2)
            browser.find_element_by_css_selector('span.RveJvd.snByac').click()
            n += 1
            
            print(n)
        else:
            print('Review scroll Finsh.')
            return soup_review
        
# review.csv 파일을 저장하기 위한 directory 생성.
if not os.path.isdir('./review'):
    os.makedirs(os.path.join('./review'))

# scroll browser function 호출
scroll(browser)

# BeautifulSoup 객체 생성
soup = BeautifulSoup(browser.page_source, 'html.parser')

# current app count & target app count
# target_number 재설정하여 app 수를 결정.
cur_number = 0
target_number = 1

# list writer & contents -> DataFrame 만들기 위해 생성
writers = []
contents = []
dates = []
# browser close
browser.quit()

# app_url 추출
for i, p in enumerate(soup.select('div.b8cIId.ReQCgd.Q9MA7b > a'), 1):
    # N(정수)로 앱 시작 위치 설정
    if i < 1:
        continue
        
#     browser = webdriver.Chrome('./MyCode/webdriver/chrome/chromedriver.exe', options=options)
    browser = webdriver.Chrome('C:/capstone/chromedriver')
    browser.maximize_window()
    
    # review page url 생성
    app_url = 'https://play.google.com/store/apps/details?id=com.king.candycrushsaga' + '&showAllReviews=true'
    browser.get(app_url)
    time.sleep(2)
    
    # 최신순 클릭
    # browser.find_element_by_css_selector('div.CeEBt.Ce1Y1c.eU809d span.DPvwYc').click()
    # time.sleep(1)
    # browser.find_element_by_css_selector('div.OA0qNb.ncFHed span.vRMGwf.oJeWuf').click()
    # time.sleep(1)
    
    # Unknown Error : Unicode Error 발생하여 try문 처리함.
    # Error 발생시 해당 web page는 "Error & Pass" 출력 후 Skip.
    try:
        # more_button_click 호출
        soup_review = more_button_click(browser)
    except Exception as e:
        print('Error & Pass')
        cur_number += 1
        
        if target_number == cur_number:
            print('Succeed.')
            break
            
        browser.quit()
        continue
    else:
        # game title 추출
        game_title = soup_review.select_one('h1.AHFaub span').text.strip()
        game_title = re.sub('[!-=+,#/\?:^$.@*\"※~&%ㆍ!』\\‘|\(\)\[\]\<\>`\'…》 ]', '_', game_title)
        book = xlsxwriter.Workbook('./{}.xlsx'.format(game_title))
        sheet = book.add_worksheet()
        
        # review writer & review content 추출
        for i, p in enumerate(soup_review.select('div[jscontroller="H6eOGe"]'), 1):
            # 리뷰 개수 설정, N은 원하는 리뷰 개수
            # if i > N:
                # break
            writer = p.select_one('span.X43Kjb').text.strip()
            content = p.select_one('span[jsname="bN97Pc"]').text.strip()
            date = p.select_one('span.p2TkOb').text.strip()
            
            writers.append(writer)
            dates.append(date)
            contents.append(content)
            
            # writer & content 출력
            # print(writer, content)

        # DataFrame 생성 -> 필요시 사용하면 됨
        reviews_df = pd.DataFrame(dict(writer=writers, content=contents, date = dates))

        # 본인이 자연어 처리 할 자리
        # csv 저장(현재 폴더에 저장)
        reviews_df.to_csv('./review/{}_{}_reviews.csv'.format(i, game_title), sep=',', index=False, encoding='utf-8-sig')
        print('{} app Saved.'.format(game_title))

        # current number count
        cur_number += 1

        # break -> app 갯수 조절 가능
        if target_number == cur_number:
            print('Succeed.')
            break

        # writers & contents 비우기
        writers.clear()
        contents.clear()
        dates.clear()

        # reviews_df, soup_review 삭제
        del reviews_df
        del soup_review

        # browser close
        browser.quit()


# In[ ]:





# In[ ]:




