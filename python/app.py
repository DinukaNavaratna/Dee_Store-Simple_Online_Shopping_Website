from flask import Flask, request
from os import walk
from index import index
from search import search

app = Flask(__name__)

@app.route("/", methods=["POST", "GET"])
def default():
	values = request.json
	index()
	similar_list = search(values['image_name'])
	return str(similar_list)

# run Server
if __name__ == "__main__":
	app.run(
		host="0.0.0.0",
		port=5000,
		debug=True,
	)
