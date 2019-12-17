# Reading Dataset

import pandas as pd
data = pd.read_csv("Dataset.csv", encoding ="ISO-8859-1")

# Gettings Sym/Dis from Dataset

cols = data.columns[:-1]
x = data[cols]          #Symptoms
y = data['prognosis']   #Diseases

# Training Decision Tree

from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier

x_train, x_test, y_train, y_test = train_test_split(x,y)
dt = RandomForestClassifier(n_jobs=2,random_state=0)
dt=dt.fit(x_train,y_train)
#print('Accuracy on the training set: {:.3f}'.format(dt.score(x_train, y_train)))
#print('Accuracy on the test set: {:.3f}'.format(dt.score(x_test, y_test)))
from collections import OrderedDict
Y_Ordered=list(OrderedDict.fromkeys(y))

# Reading Symptoms array from PHP

import sys, json
import numpy as np

Symp = sys.argv[1]
Symp = json.loads(Symp)

# Creating Sample and predicting it

Sample = [0 for i in range(len(cols))]
for i in range(len(cols)):
    for j in range(len(Symp)):
        if(i==Symp[j]):
            Sample[i]=1

Sample = np.array(Sample).reshape(1,len(Sample))
Predict= dt.predict(Sample)
Prob_Array=dt.predict_proba(Sample)
Prob_Array_Indices=np.argsort(-Prob_Array)

#Printing percentage of the first 3 Predicted diseases

Sums=0
for x in range (3):
    Sums=Sums+Prob_Array[0][Prob_Array_Indices[0][x]] #Sum of first 3 percentages
for x in range (3):
    print(Y_Ordered[Prob_Array_Indices[0][x]])
    print('{:.1f}'.format((Prob_Array[0][Prob_Array_Indices[0][x]]*100)/Sums)) #Percentage out of 100


