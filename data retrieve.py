import pymysql
conn=pymysql.connect(user="root",password=" ",host="localhost",db="saveRating.php")
b=conn.cursor()
query='select*from item_rating;'
r=b.execute(query)
data=b.fetchall()
print(data)

