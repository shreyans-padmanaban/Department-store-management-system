import sqlite3
import random
conn = sqlite3.connect('Emp.db')
c=conn.cursor()

def create_table():
    c.execute('CREATE TABLE IF NOT EXISTS customer(id INTEGER PRIMARY KEY,name TEXT,phone TEXT)')
    c.execute('CREATE TABLE IF NOT EXISTS bill(bill_no INTEGER,cust_id INTEGER,total INTEGER)')
    c.execute('CREATE TABLE IF NOT EXISTS employee(DEPT TEXT,emp_id INTEGER,name TEXT,mobile INTEGER,addr TEXT,sex TEXT,dob DATE,salary INTEGER,pass TEXT)')
    c.execute('CREATE TABLE IF NOT EXISTS transactions(tran_id INTEGER,bill_no INTEGER,p_id INTEGER)')
    c.execute('CREATE TABLE IF NOT EXISTS product(p_id INTEGER PRIMARY KEY,name TEXT,stock INTEGER,exp_date DATE,mrp INTEGER,aisle_no INTEGER)')

create_table()



conn.commit()
conn.close()
