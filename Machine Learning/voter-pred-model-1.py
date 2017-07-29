# -*- coding: utf-8 -*-
"""
Created on Fri Jul 21 19:26:37 2017

@author: Moss
"""

from sklearn import tree

anything = tree.DecisionTreeClassifier()

# [How do you vote EU Ref, Last General Election 15, Main voter Issue, how you plan to vote ]

X = [[1, 3, 16, 7], [1, 4, 16, 7],
        [1, 5, 16, 8], [2, 5, 13, 7],
        [2, 5, 10, 7], [2, 9, 11, 7],
        [2, 10, 10, 12], [2, 4, 13, 7],
        [2, 5, 14, 7], [2, 5, 13, 7],
        [1, 4, 15, 7], [2, 5, 10, 7],
        [1, 5, 13, 7], [1, 4, 16, 7],
        [1, 4, 16, 7], [1, 4, 16, 7]]

Y = ["UKIP", "Tory", "Tory", "Labour", "Labour", "Labour", "Labour", "Labour", "Labour",
     "Labour", "Tory", "Tory", "Labour", "Tory", "Tory", "Tory"]

anything = anything.fit(X, Y)

prediction = anything.predict([[2, 5, 13, 7]])

# CHALLENGE compare their reusults and print the best one!

print(prediction)