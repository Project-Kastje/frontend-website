#!/usr/bin/python

import mysql.connector as mariadb

# connect to the database
mariadb_connection = mariadb.connect(
            user='backend-service',
                password='geheim!',
                    database='kastje')

# create a cursor object for executing queries
cursor = mariadb_connection.cursor()

# prepare a select query (last 100 items)
stmt = "SELECT * FROM history"

# execute the query (parameter must be a tuple)
cursor.execute(stmt)

# returned rows (tuples)
rows = cursor.fetchall()

print("Content-Type: text/html")
for row in rows:
    print(row)

cursor.close()
mariadb_connection.close()
