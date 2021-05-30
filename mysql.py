import pymysql
conn=pymysql.connect(user='root',password='',host='localhost',database='PHP CODE')
cursor=conn.cursor()
query='select * from item_rating';
r=cursor.execute(query)
data=cursor.fetchall()
print(*data,sep="\n")
