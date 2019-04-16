import requests
import json

class Getnames:
    def __init__(self, id):
        self.target_id = id
        self.friends_array = []
    
    def getnames(self):
        api = "http://fg-69c8cbcd.herokuapp.com/user/{userid}"
        url = api.format(userid=self.target_id)
        res =  requests.get(url)
        data = json.loads(res.text)
        self.name = data["name"]
        return data["friends"]
    
    def getfriendsnames(self, id_array):
        for id in id_array:
            api = "http://fg-69c8cbcd.herokuapp.com/user/{userid}"
            url = api.format(userid=id)
            res =  requests.get(url)
            data = json.loads(res.text)
            self.friends_array.append(data["name"])
    
    def returnresult(self):
        print("name:{} ,friends_name:{}".format(self.name, self.friends_array))

    def returndata
id_input = input('>>')
id = Getnames(id_input)
ids = id.getnames()
id.getfriendsnames(ids)
id.returnresult()