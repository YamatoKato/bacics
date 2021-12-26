#!/usr/bin/env python #  # -- coding: utf-8 --
import random
jan = ["グー","チョキ","パー"]
judge = ["あいこ","負け","勝ち"]
print("0=グー、1＝チョキ、2＝パー")
y =int (input("じゃんけん・・・"))
print("あなた＝"+jan[y])
p = random.randint(0,2)
pc = jan[p]
print("pc="+jan[p])
i = (y - p) % 3
print(judge[i])