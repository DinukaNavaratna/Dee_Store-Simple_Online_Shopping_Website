# import the necessary packages
from colordescriptor import ColorDescriptor
from searcher import Searcher
import argparse
import cv2
import os
from dotenv import load_dotenv

load_dotenv()

temp_img_path = os.getenv('temp_img_path')
csv_file = os.getenv('csv_file')

def search(temp_img):
	# initialize the image descriptor
	cd = ColorDescriptor((8, 12, 3))

	# load the query image and describe it
	query = cv2.imread(temp_img_path+temp_img)
	features = cd.describe(query)

	# perform the search
	searcher = Searcher(csv_file)
	results = searcher.search(features)

	# display the query
	cv2.imshow("Query", query)

	similar_list = ""

	# loop over the results
	for (score, resultID) in results:
		# load the result image and display it
		result = cv2.imread(resultID)
		resultID = resultID.split("\\")[1]
		resultID = resultID.split(".")[0]
		if similar_list != "":
			similar_list+= ","
		similar_list+= resultID
		#cv2.imshow("Result", result)
		#cv2.waitKey(0)
	
	return similar_list