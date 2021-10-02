# import the necessary packages
from colordescriptor import ColorDescriptor
import argparse
import glob
import cv2
import os
from dotenv import load_dotenv

load_dotenv()

images = os.getenv('images')
image_dir = os.getenv('image_dir')
csv_file = os.getenv('csv_file')

def index():
	# initialize the color descriptor
	cd = ColorDescriptor((8, 12, 3))

	# open the output index file for writing
	output = open(csv_file, "w")

	# use glob to grab the image paths and loop over them
	for imagePath in glob.glob(images):
		# extract the image ID (i.e. the unique filename) from the image
		# path and load the image itself
		imageID = imagePath[imagePath.rfind(image_dir) + 1:]
		print("\n"+str(imagePath))
		image = cv2.imread(imagePath)
		# describe the image
		features = cd.describe(image)

		if(features != "null"):
			# write the features to file
			features = [str(f) for f in features]
			output.write("%s,%s\n" % (imageID, ",".join(features)))
		
	# close the index file
	output.close()