# -*- coding: utf-8 -*-
"""
Created on Fri Jul 21 19:26:37 2017

@author: Moss
"""

from sklearn import tree

anything = tree.DecisionTreeClassifier()

# [How do you vote EU Ref, Last General Election 15, Main voter Issue, how you plan to vote ]

X = [
        ["Leave", "UKIP", "EU", "In person"], ["Leave", "Tory", "EU", "In person"],
        ["Leave", "Labour", "EU", "Postal"], ["Remain", "Labour", "NHS", "In person"],
        ["Remain", "Labour", "x", "In person"], ["Remain", "Lib Dem", "Education", "In person"],
        ["Remain", "x", "x", "Social Mobility"], ["Remain", "Tory", "NHS", "In person"],
        ["Remain", "Labour", "Housing", "In person"], ["Remain", "Labour", "NHS", "In person"],
        ["Leave", "Tory", "Immigration", "In person"], ["Remain", "Labour", "x", "In person"],
        ["Leave", "Labour", "NHS", "In person"], ["Leave", "Tory", "EU", "In person"],
        ["Leave", "Tory", "EU", "In person"], ["Leave", "Tory", "EU", "In person"]

    ]

Y = ["UKIP", "Tory", "Tory", "Labour", "Labour", "Labour", "Labour", "Labour", "Labour",
     "Labour", "Tory", "Tory", "Labour", "Tory", "Tory", "Tory"]

anything = anything.fit(X, Y)

prediction = anything.predict([["Remain", "Labour", "Human Rights", "In person"]])

# CHALLENGE compare their reusults and print the best one!

print(prediction)




