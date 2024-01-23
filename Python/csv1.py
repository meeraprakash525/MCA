# Python program to read CSV file line by line 
# import necessary packages 
import csv 
with open('samplecsv.csv') as file_obj: 
    reader_obj = csv.reader(file_obj) 
    for row in reader_obj: 
        print(row)