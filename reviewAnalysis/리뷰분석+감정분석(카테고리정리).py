#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
from konlpy.tag import Kkma
from konlpy.tag import Komoran
from konlpy.tag import Hannanum
#from konlpy.tag import Mecab
import MeCab
from konlpy.tag import Okt
import re
import nltk
import gensim
# 형태소 분석을 위한 객체 생성.
kkma = Kkma()
komoran = Komoran()
hannanum = Hannanum()
mecab = MeCab.Tagger()
#mecab = Mecab()
okt = Okt()
from openpyxl import Workbook


# In[2]:


reviews = pd.read_csv('C:/capstone/review/238343_trainReviews.csv',usecols = ['content'])


# In[3]:


def mecab_nouns(text):
    nouns = []
    
   
    pattern = re.compile(".*\t[A-Z]+") 
    
    temp = [tuple(pattern.match(token).group(0).split("\t")) for token in mecab.parse(text).splitlines()[:-1]]
        
    for token in temp:
        if token[1] == "NNG" or token[1] == "NNP" or token[1] == "NNB" or token[1] == "NNBC" or token[1] == "NP" or token[1] == "NR":
            nouns.append(token[0])
        
    return nouns

def mecab_morphs(text):
    morphs = []
    
    pattern = re.compile(".*\t[A-Z]+") 
    
    temp = [tuple(pattern.match(token).group(0).split("\t")) for token in mecab.parse(text).splitlines()[:-1]]
        
    for token in temp:
        morphs.append(token[0])
    
    return morphs

def mecab_pos(text):
    pos = []
    pattern = re.compile(".*\t[A-Z]+") 
    
    pos = [tuple(pattern.match(token).group(0).split("\t")) for token in mecab.parse(text).splitlines()[:-1]]
        
    return pos


# In[4]:


def text_cleaning(doc):
    doc = re.sub("[^ㄱ-ㅎㅏ-ㅣ가-힣 ]", "", str(doc))
    return doc

def define_stopwords(path):
    
    SW = set()
    
    with open(path) as f:
        for word in f:
            SW.add(word)
            
    return SW

def text_tokenizing(doc):
    
    
    return [word for word in mecab_morphs(doc) if word not in SW and len(word) > 1]


# In[5]:


rp ='C:/capstone/stopwords-ko.txt'
SW = define_stopwords(rp)


# In[6]:


sentences = reviews['content'].apply(text_cleaning)


# In[7]:


tokens = sentences.apply(text_tokenizing)


# In[8]:


tokens.apply(text_cleaning)


# In[9]:


tokens_len = 0
for i in range(len(tokens)):
    if len(tokens[i])>5:
        tokens_len = tokens_len +1
        
print(tokens_len)
for i in range(len(tokens)):
    if len(tokens[i])>5:
        tokens_len = tokens_len +1


# In[10]:


from gensim.models import word2vec


# In[11]:


model = word2vec.Word2Vec(tokens, size=100, window = 2, min_count=30, workers=4, iter=100, sg=1)


# In[12]:


model_name = 'Word2Vec.model'
model.save(model_name)


# In[13]:


len(model.wv.vocab)


# In[14]:


sorted(vocab, key=vocab.get, reverse=True)[150:200]


# In[15]:


vocab = model.wv.vocab


# In[16]:


vocab_list = list(vocab)[:]
len(vocab_list)


# In[17]:


model.wv.most_similar('어려움')


# In[18]:


import numpy as np
from sklearn.metrics.pairwise import euclidean_distances


# In[19]:


vocab_length = len(vocab_list)
word_metrix = np.zeros((vocab_length,100))

#word_metrix = [model.wv.get_vector(v) for v in model.wv.vocab.keys()] 
#단어행렬
for i in range(vocab_length):
        word_metrix[i] = model.wv.get_vector(vocab_list[i])


# In[20]:


#거리 행렬과 가중치 행렬(정규분포 적용, 정규분포에 가까워지도록 하는 분산 값 확인 필요) 
distance_matrix = euclidean_distances(word_metrix, word_metrix)
weight_matrix = np.exp(-(distance_matrix ** 2) / (2 * np.var(distance_matrix)))

#print(distance_matrix)
#print(weight_matrix)


# In[21]:


print(vocab_list.index('광고'))

print(vocab_list.index('결제'))

print(vocab_list.index('충전'))
print(vocab_list.index('구매'))
print(vocab_list.index('현질'))
print(vocab_list.index('환불'))

print(vocab_list.index('계정'))

print(vocab_list.index('아이디'))
print(vocab_list.index('연동'))
print(vocab_list.index('로그인'))
print(vocab_list.index('가입'))


print(vocab_list.index('서버'))

print(vocab_list.index('연결'))
print(vocab_list.index('접속'))
print(vocab_list.index('로딩'))
print(vocab_list.index('와이파이'))

print(vocab_list.index('구성'))

print(vocab_list.index('이벤트'))
print(vocab_list.index('퀘스트'))
print(vocab_list.index('스테이지'))
print(vocab_list.index('어려운'))

#print(vocab_list.index('연출'))
print(vocab_list.index('모션'))
print(vocab_list.index('배경'))
print(vocab_list.index('그래픽'))
print(vocab_list.index('소리'))
print(vocab_list.index('디자인'))

print(vocab_list.index('캐릭'))

print(vocab_list.index('스킬'))
print(vocab_list.index('영웅'))
print(vocab_list.index('아이템'))
print(vocab_list.index('스킨'))

#print(vocab_list.index('시스템'))
print(vocab_list.index('업데이트'))
print(vocab_list.index('용량'))
print(vocab_list.index('다운'))
print(vocab_list.index('버그'))
print(vocab_list.index('설치'))



a0 = weight_matrix[0]#광고

a1 = weight_matrix[1250]#결제
a2 = weight_matrix[2739]#충전
a3 = weight_matrix[1774]#구매
a4 = weight_matrix[992]#현질
a5 = weight_matrix[1448]#환불

a6 = weight_matrix[1776]#계정
a7 = weight_matrix[2874]#아이디
a8 = weight_matrix[2748]#연동
a9 = weight_matrix[1461]#로그인
a10 = weight_matrix[1710]#가입

a11 = weight_matrix[640]#서버
a12 = weight_matrix[791]#연결
a13 = weight_matrix[1446]#접속
a14 = weight_matrix[1078]#로딩
a15 = weight_matrix[1137]#와이파이

a16 = weight_matrix[1282]#구성
a17 = weight_matrix[1120]#이벤트
a18 = weight_matrix[1264]#퀘스트
a19 = weight_matrix[1251]#스테이지
a20 = weight_matrix[228]#어려운

a21 = weight_matrix[2783]#효과
a22 = weight_matrix[1407]#배경
a23 = weight_matrix[303]#그래픽
a24 = weight_matrix[245]#소리
a25 = weight_matrix[1352]#디자인

a26 = weight_matrix[1411]#캐릭터
a27 = weight_matrix[1323]#스킬
a28 = weight_matrix[1445]#영웅
a29 = weight_matrix[547]#아이템
a30 = weight_matrix[663]#스킨

a31 = weight_matrix[776]#업데이트
a32 = weight_matrix[3734]#용량
a33 = weight_matrix[276]#다운
a34 = weight_matrix[714]#버그
a35 = weight_matrix[486]#설치


# In[22]:


W_M=np.array([a0,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27,a28,a29,a30,a31,a32,a33,a34,a35])


# In[23]:


#TDM 설계
from sklearn.feature_extraction.text import CountVectorizer


# In[25]:


#우리가 새로 넣어서 분석할 리뷰들
train_reviews = pd.read_csv('C:/capstone/review/238343_trainReviews.csv')
sentences = train_reviews['content'].apply(text_cleaning)


# In[26]:


#CountVectorizer 
vectorizer = CountVectorizer(tokenizer = text_tokenizing ,vocabulary= vocab_list, binary= bool)
#print(vectorizer)


# In[27]:


X2 = vectorizer.fit_transform(sentences)
#print(X2.toarray().shape)


# In[28]:


#내적을 위해 트랜스폼
term_document_matrix = X2.toarray().T
#print(X3)
#print(W_M.shape)


# In[29]:


rv = 6418
sample_content = train_reviews['content'][rv]
sample_content


# In[30]:


function_score = np.dot(W_M , term_document_matrix[ : ,rv:rv+1])
#sorted(function_score, reverse=True)#내적


# In[31]:


for i in range(36):
    print(i, " : ", function_score[:][i])


# In[32]:


#print(function_score)
for i in range(36):
    if function_score[i]==max(function_score):
        print(i)


# In[33]:


#그 리뷰가 어느 기능에 속하는지
arr1 = np.zeros(len(sentences))
arr2 = np.zeros(len(sentences))
arr3 = np.zeros(len(sentences))

arr1.fill(50)
arr2.fill(50)
arr3.fill(50)

score = 0.2
for j in range(len(sentences)):
    function_score = np.dot(W_M , term_document_matrix[ : ,j:j+1])
    fs = sorted(function_score, reverse = True)
    
    if fs[0]>score:
        if fs[0]==fs[1]:
            arr1[j] = np.where(function_score==fs[0])[0][0]
            arr2[j] = np.where(function_score==fs[0])[0][1]
            if fs[2]>score:
                arr3[j] = np.where(function_score==fs[2])[0]
            continue
        
        arr1[j] = np.where(function_score==fs[0])[0]

    
    if fs[1]>score:
        arr2[j] = np.where(function_score==fs[1])[0]
    
    
    if fs[2]>score:
        arr3[j] = np.where(function_score==fs[2])[0]
    


# In[34]:


category1 = list()
for i in range(len(sentences)):
    if arr1[i]==0:
        category1.append('광고')
    elif arr1[i]==1:
        category1.append('결제')
    elif arr1[i]==2:
        category1.append('충전')
    elif arr1[i]==3:
        category1.append('구매')       
    elif arr1[i]==4:
        category1.append('현질')       
    elif arr1[i]==5:
        category1.append('환불')
    elif arr1[i]==6:
        category1.append('계정')
    elif arr1[i]==7:
        category1.append('아이디')
    elif arr1[i]==8:
        category1.append('연동')
    elif arr1[i]==9:
        category1.append('로그인')
    elif arr1[i]==10:
        category1.append('가입')
    elif arr1[i]==11:
        category1.append('서버')
    elif arr1[i]==12:
        category1.append('연결')
    elif arr1[i]==13:
        category1.append('접속')
    elif arr1[i]==14:
        category1.append('로딩')
    elif arr1[i]==15:
        category1.append('네트워크')
    elif arr1[i]==16:
        category1.append('구성')
    elif arr1[i]==17:
        category1.append('이벤트')
    elif arr1[i]==18:
        category1.append('퀘스트')
    elif arr1[i]==19:
        category1.append('스테이지')
    elif arr1[i]==20:
        category1.append('난이도')
    elif arr1[i]==21:
        category1.append('모션')
    elif arr1[i]==22:
        category1.append('배경')
    elif arr1[i]==23:
        category1.append('그래픽')
    elif arr1[i]==24:
        category1.append('소리')
    elif arr1[i]==25:
        category1.append('디자인')
    elif arr1[i]==26:
        category1.append('캐릭터')
    elif arr1[i]==27:
        category1.append('스킬')
    elif arr1[i]==28:
        category1.append('영웅')
    elif arr1[i]==29:
        category1.append('아이템')
    elif arr1[i]==30:
        category1.append('스킨')
    elif arr1[i]==31:
        category1.append('업데이트')
    elif arr1[i]==32:
        category1.append('용량')
    elif arr1[i]==33:
        category1.append('다운')
    elif arr1[i]==34:
        category1.append('버그')
    elif arr1[i]==35:
        category1.append('설치')
    elif arr1[i]==50:
        category1.append('기타')


# In[35]:


len(category1)


# In[36]:


category2 = list()
for i in range(len(sentences)):
    if arr2[i]==0:
        category2.append('광고')
    elif arr2[i]==1:
        category2.append('결제')
    elif arr2[i]==2:
        category2.append('충전')
    elif arr2[i]==3:
        category2.append('구매')       
    elif arr2[i]==4:
        category2.append('현질')       
    elif arr2[i]==5:
        category2.append('환불')
    elif arr2[i]==6:
        category2.append('계정')
    elif arr2[i]==7:
        category2.append('아이디')
    elif arr2[i]==8:
        category2.append('연동')
    elif arr2[i]==9:
        category2.append('로그인')
    elif arr2[i]==10:
        category2.append('가입')
    elif arr2[i]==11:
        category2.append('서버')
    elif arr2[i]==12:
        category2.append('연결')
    elif arr2[i]==13:
        category2.append('접속')
    elif arr2[i]==14:
        category2.append('로딩')
    elif arr2[i]==15:
        category2.append('네트워크')
    elif arr2[i]==16:
        category2.append('구성')
    elif arr2[i]==17:
        category2.append('이벤트')
    elif arr2[i]==18:
        category2.append('퀘스트')
    elif arr2[i]==19:
        category2.append('스테이지')
    elif arr2[i]==20:
        category2.append('난이도')
    elif arr2[i]==21:
        category2.append('모션')
    elif arr2[i]==22:
        category2.append('배경')
    elif arr2[i]==23:
        category2.append('그래픽')
    elif arr2[i]==24:
        category2.append('소리')
    elif arr2[i]==25:
        category2.append('디자인')
    elif arr2[i]==26:
        category2.append('캐릭터')
    elif arr2[i]==27:
        category2.append('스킬')
    elif arr2[i]==28:
        category2.append('영웅')
    elif arr2[i]==29:
        category2.append('아이템')
    elif arr2[i]==30:
        category2.append('스킨')
    elif arr2[i]==31:
        category2.append('업데이트')
    elif arr2[i]==32:
        category2.append('용량')
    elif arr2[i]==33:
        category2.append('다운')
    elif arr2[i]==34:
        category2.append('버그')
    elif arr2[i]==35:
        category2.append('설치')
    elif arr3[i]==50:
        category2.append('기타')


# In[37]:


category3 = list()
for i in range(len(sentences)):
    if arr3[i]==0:
        category3.append('광고')
    elif arr3[i]==1:
        category3.append('결제')
    elif arr3[i]==2:
        category3.append('충전')
    elif arr3[i]==3:
        category3.append('구매')       
    elif arr3[i]==4:
        category3.append('현질')       
    elif arr3[i]==5:
        category3.append('환불')
    elif arr3[i]==6:
        category3.append('계정')
    elif arr3[i]==7:
        category3.append('아이디')
    elif arr3[i]==8:
        category3.append('연동')
    elif arr3[i]==9:
        category3.append('로그인')
    elif arr3[i]==10:
        category3.append('가입')
    elif arr3[i]==11:
        category3.append('서버')
    elif arr3[i]==12:
        category3.append('연결')
    elif arr3[i]==13:
        category3.append('접속')
    elif arr3[i]==14:
        category3.append('로딩')
    elif arr3[i]==15:
        category3.append('네트워크')
    elif arr3[i]==16:
        category3.append('구성')
    elif arr3[i]==17:
        category3.append('이벤트')
    elif arr3[i]==18:
        category3.append('퀘스트')
    elif arr3[i]==19:
        category3.append('스테이지')
    elif arr3[i]==20:
        category3.append('난이도')
    elif arr3[i]==21:
        category3.append('모션')
    elif arr3[i]==22:
        category3.append('배경')
    elif arr3[i]==23:
        category3.append('그래픽')
    elif arr3[i]==24:
        category3.append('소리')
    elif arr3[i]==25:
        category3.append('디자인')
    elif arr3[i]==26:
        category3.append('캐릭터')
    elif arr3[i]==27:
        category3.append('스킬')
    elif arr3[i]==28:
        category3.append('영웅')
    elif arr3[i]==29:
        category3.append('아이템')
    elif arr3[i]==30:
        category3.append('스킨')
    elif arr3[i]==31:
        category3.append('업데이트')
    elif arr3[i]==32:
        category3.append('용량')
    elif arr3[i]==33:
        category3.append('다운')
    elif arr3[i]==34:
        category3.append('버그')
    elif arr3[i]==35:
        category3.append('설치')
    elif arr3[i]==50:
        category3.append('기타')


# In[38]:


import sys
np.set_printoptions(threshold=sys.maxsize)


# In[39]:


from collections import Counter


# In[40]:


count = Counter(category1)


# In[41]:


count2 = Counter(category2)
count3 = Counter(category3)


# In[42]:


save_category = pd.DataFrame({'writer':train_reviews['writer'], 'content':train_reviews['content'], 'category1':category1, 'category2':category2, 'category3':category3})


# In[43]:


filter1 = save_category['category1'] == '난이도'


# In[44]:


save_category[filter1]


# In[45]:


save_category


# In[46]:


print(count)


# In[47]:


print(count2)


# In[48]:


print(count3)


# In[49]:


print(count + count2 + count3)


# In[467]:


#save_category.to_csv('./review/{}_{}_reviews.csv'.format(i, game_title), sep=',', index=False, encoding='utf-8-sig')


# In[75]:


import pymysql
pymysql.install_as_MySQLdb()
from sqlalchemy import create_engine


# In[76]:



# MySQL Connector using pymysql
pymysql.install_as_MySQLdb()
import MySQLdb

engine = create_engine("mysql+mysqldb://root:"+"0000"+"@localhost:3306/capstone", encoding='utf-8')
conn = engine.connect()


# In[ ]:


import pandas as pd

#from konlpy.tag import Mecab
import MeCab
from konlpy.tag import Okt
import re
import nltk
from gensim import corpora
from gensim import models

import string
mecab = MeCab.Tagger()
from tqdm import tqdm_notebook
import json
import os
from pprint import pprint


# In[ ]:


emo_reviews = pd.read_csv('C:/capstone/review/16200_ROBLOX_reviews.csv', usecols =["content"] )


# In[ ]:


r_content = emo_reviews['content']


# In[ ]:


def read_data(filename):
    with open(filename, 'r' , encoding="utf-8") as f:
        data = [line.split('\t') for line in f.read().splitlines()]
        data = data[1:]
    return data

train_data = read_data('C:/capstone/data/nsmc-master/ratings_train.txt')
test_data = read_data('C:/capstone/data/nsmc-master/ratings_test.txt')


# In[ ]:


okt = Okt()
import json
import os
from pprint import pprint


# In[ ]:


def tokenize(doc):
    # norm은 정규화, stem은 근어로 표시하기를 나타냄
    return ['/'.join(t) for t in okt.pos(doc, norm=True, stem=True)]

if os.path.isfile('train_docs.json'):
    with open('train_docs.json', 'r', encoding="utf-8") as f:
        train_docs = json.load(f)
    with open('test_docs.json', 'r', encoding="utf-8") as f:
        test_docs = json.load(f)
else:
    train_docs = [(tokenize(row[1]), row[2]) for row in train_data]
    test_docs = [(tokenize(row[1]), row[2]) for row in test_data]
    # JSON 파일로 저장
    with open('train_docs.json', 'rt', encoding="utf-8") as make_file:
        json.dump(train_docs, make_file, ensure_ascii=False, indent="\t")
    with open('test_docs.json', 'rt', encoding="utf-8") as make_file:
        json.dump(test_docs, make_file, ensure_ascii=False, indent="\t")


pprint(train_docs[0])


# In[ ]:


tokens = [t for d in train_docs for t in d[0]]


# In[ ]:


text = nltk.Text(tokens, name='NMSC')

# 전체 토큰의 개수
print(len(text.tokens))

# 중복을 제외한 토큰의 개수
print(len(set(text.tokens)))            

# 출현 빈도가 높은 상위 토큰 10개
pprint(text.vocab().most_common(10))


# In[ ]:


selected_words = [f[0] for f in text.vocab().most_common(1000)]

def term_frequency(doc):
    return [doc.count(word) for word in selected_words]

train_x = [term_frequency(d) for d, _ in train_docs]
test_x = [term_frequency(d) for d, _ in test_docs]
train_y = [c for _, c in train_docs]
test_y = [c for _, c in test_docs]


# In[ ]:


x_train = np.asarray(train_x).astype('float32')
x_test = np.asarray(test_x).astype('float32')

y_train = np.asarray(train_y).astype('float32')
y_test = np.asarray(test_y).astype('float32')


# In[ ]:


import tensorflow as tf
from tensorflow import keras
from tensorflow.keras import models
from tensorflow.keras import layers
from tensorflow.keras import optimizers
from tensorflow.keras import losses
from tensorflow.keras import metrics

model = models.Sequential()
model.add(layers.Dense(64, activation='relu', input_shape=(1000,)))
model.add(layers.Dense(64, activation='relu'))
model.add(layers.Dense(1, activation='sigmoid'))

model.compile(optimizer=optimizers.RMSprop(lr=0.001),
             loss=losses.binary_crossentropy,
             metrics=[metrics.binary_accuracy])

model.fit(x_train, y_train, epochs=10, batch_size=512)
results = model.evaluate(x_test, y_test)


# In[78]:


def predict_pos_neg(review):
    token = tokenize(review)
    tf = term_frequency(token)
    data = np.expand_dims(np.asarray(tf).astype('float32'), axis=0)
    score = float(model.predict(data))
    if(score > 0.75):
        emotion = '긍정'
        return emotion
        #print("[{}]는 만족 리뷰입니다.^^\n".format(review))
    elif(score > 0.5):
        emotion = '약한 긍정'
        return emotion
        #print("[{}]는 약간 만족 리뷰입니다.^^\n".format(review))
    elif(score>0.25):
        #print("[{}]는 약간 불만족 리뷰입니다.^^\n".format(review))
        emotion = '약한 부정'
        return emotion
    else:
        #print("[{}]는 불만족 리뷰입니다.^^\n".format(review))
        emotion = '부정'
        return emotion


# In[80]:


emo_arr = list()

for i in range(len(sentences)):
    emo_arr.append(predict_pos_neg(r_content[i]))


# In[81]:


save_category = pd.DataFrame({'writer':train_reviews['writer'], 'content':train_reviews['content'], 'category1':category1, 'category2':categort2, 'category3':category3, 'emotion':emo_arr})


# In[82]:


save_category


# In[77]:


#MySQL로 저장
save_category.to_sql(name='reviews', con=engine, if_exists='append')


# In[ ]:




