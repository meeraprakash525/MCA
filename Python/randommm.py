# Import the 'random' module to shuffle elements in a list randomly.
import random

# Create a list of characters containing vowels.
char_list = ['a', 'e', 'i', 'o', 'u']

# Shuffle the elements in the 'char_list' randomly.
random.shuffle(char_list)

# Print the shuffled list of characters as a string.
print(''.join(char_list))