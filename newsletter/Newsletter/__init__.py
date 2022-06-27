from flask import Flask
from flask_sqlalchemy import SQLAlchemy



app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql://root:root@127.0.0.1:8889/mvc'
app.config['SECRET_KEY'] = "random string"

db = SQLAlchemy(app)

app.config['MAIL_SERVER'] = 'smtp-yuniq.alwaysdata.net'
app.config['MAIL_PORT'] = 587
app.config['MAIL_USERNAME'] = 'yuniq@alwaysdata.net'
app.config['MAIL_PASSWORD'] = 'Admkyuniq'
app.config['MAIL_USE_SSL'] = False
app.config['MAIL_USE_TLS'] = True



from Newsletter import route