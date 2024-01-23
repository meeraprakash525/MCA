# importing the module
import pandas as pd
df = pd.read_csv("student_scores2.csv", usecols=['IQ', 'Scores'])
print(df)