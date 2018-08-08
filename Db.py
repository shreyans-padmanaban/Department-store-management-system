import sqlite3
from tkinter import *
conn = sqlite3.connect('Emp.db')
c=conn.cursor()

master=Tk()

def create_table():
    c.execute('CREATE TABLE IF NOT EXISTS customer(id INTEGER PRIMARY KEY,name TEXT,phone TEXT)')
    c.execute('CREATE TABLE IF NOT EXISTS bill(bill_no INTEGER,cust_id INTEGER)')
    c.execute('CREATE TABLE IF NOT EXISTS employee(emp_id INTEGER,name TEXT,mobile INTEGER,addr TEXT,sex TEXT,dob DATE,salary INTEGER)')
    c.execute('CREATE TABLE IF NOT EXISTS transactions(tran_id INTEGER,bill_no INTEGER,p_id INTEGER)')
    c.execute('CREATE TABLE IF NOT EXISTS product(p_id INTEGER PRIMARY KEY,name TEXT,stock INTEGER,exp_date DATE,mrp INTEGER,aisle_no INTEGER)')

def insert_table():
    bill = ["insert into bill VALUES(353536, 44222)","insert into bill VALUES(1553, 23232)","insert into bill VALUES(45466,23244)","insert into bill VALUES(5353, 434353222)"]
    for i in range(len(bill)):
        c.execute(bill[i])
    customer = ["insert into customer VALUES(43214,'John','9888391876')","insert into customer VALUES(33441,'Alicia','9864958721')","insert into customer VALUES(325541,'Hans','77483928172')"]
    for i in range(len(customer)):
        c.execute(customer[i])


create_table()
insert_table()
conn.commit()
conn.close()
