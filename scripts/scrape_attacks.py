# KEYS

# input_type
# 	1 = aerial
# 	2 = smash
# 	3 = tilt
#	4 = special / B
# 	5 = jab
# 	6 = dash
# 	7 = grab
# 	8 = dodge
# 	9 = roll
#  10 = throw
#  11 = taunt
#
#
# input_dir
# 	0 = neutral
# 	1 = up
# 	2 = forward
# 	3 = down
# 	4 = back
# 	5 = n/a

import csv

desc_field = 9
input_dir = 6
input_type = 5
seq_num = 8

with open('dump.csv', 'rb') as dump, open('dump_out.csv', 'wb') as dump_back:
	reader = csv.reader(dump)
	writer = csv.writer(dump_back)

 	for row in reader:
 		
 		#input direction
 		if "Neutral" in row[desc_field]:
 			row[input_dir] = 0
 		elif "Up" in row[desc_field]:
 			row[input_dir] = 1
 		elif "Forward" in row[desc_field]:
 			row[input_dir] = 2
 		elif "Down" in row[desc_field]:
 			row[input_dir] = 3
 		elif "Back" in row[desc_field]:
 			row[input_dir] = 4
		elif "Running" in row[desc_field]:
 			row[input_dir] = 2
 		elif "Standing" in row[desc_field]:
 			row[input_dir] = 0
 		elif "input_dir" in row[desc_field]: #covers first title row
 			row[input_dir] = 'input_dir'
		else:
			row[input_dir] = 5

		#input type
 		if "Air" in row[desc_field]:
 			row[input_type] = 1
 		elif "Smash" in row[desc_field]:
 			row[input_type] = 2
	 	elif "Tilt" in row[desc_field]:
 			row[input_type] = 3
 		elif "Throw" in row[desc_field]:
 			row[input_type] = 10
		elif "B" in row[desc_field]:
 			row[input_type] = 4
		elif "Jab" in row[desc_field]:
 			row[input_type] = 5
		elif "Dash" in row[desc_field]:
 			row[input_type] = 6
		elif "Grab" in row[desc_field]:
 			row[input_type] = 7
		elif "Dodge" in row[desc_field]:
 			row[input_type] = 8
		elif "Roll" in row[desc_field]:
 			row[input_type] = 9
 		elif "Taunt" in row[desc_field]:
 			row[input_type] = 11


 		#sequence number
 		if "1" in row[desc_field]:
 			row[seq_num] = 1
		elif "2" in row[desc_field]:
 			row[seq_num] = 2
 		elif "3" in row[desc_field]:
 			row[seq_num] = 3
		elif "4" in row[desc_field]:
 			row[seq_num] = 4

 		
		writer.writerow(row)

