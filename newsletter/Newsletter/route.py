import hashlib
from flask import request, flash, url_for, redirect, render_template,  session

from flask_mail import Mail, Message
from Newsletter.users import *
from Newsletter import users, app, admin
mail = Mail(app)

@app.route('/new', methods = ['GET', 'POST'])
def new():
    if session['role'] == 'ROLE_ADMIN':
       if request.method == 'POST':
          if not request.form['email']:
             flash('Please enter all the fields', 'error')
          else:
             user = users.Newsletter(request.form['email'])
             db.session.add(user)
             db.session.commit()
             flash('Record was successfully added')
             return redirect(url_for('show_all'))
       return render_template('index.html')
    else:
        return redirect(url_for('login'))


@app.route('/show_all', methods=['GET', 'POST'])
def show_all():
    if session['role'] == 'ROLE_ADMIN':
        for user in users.Newsletter.query.all():
            print(user)
        return render_template('show_all.html', users = users.Newsletter.query.all())
    else:
        return redirect(url_for('login'))

@app.route('/logout')
def logout():
    session.pop('email', None)
    return redirect("http://localhost:8888/MVC/public/")

@app.route('/email', methods=['GET', 'POST'])
def email():
    if session['role'] == 'ROLE_ADMIN':
        msg =''
        if request.method == 'POST':
            msg_body = request.form['body']
            msg_subject = request.form['subject']
            print(msg_body)
            print(msg_subject)
            sendMail(msg_subject,msg_body)
            msg ='Email Envoyé'

        return render_template('email.html',msg = msg )


    else:
        return redirect(url_for('login'))



@app.route('/', methods=['GET', 'POST'])
def login():
    session['role'] = 'ROLE_USER'
    if request.method == 'POST':
        username = request.form['username']
        pwd = request.form['password'].encode('utf-8')

        new_pwd = hashlib.sha1(pwd).hexdigest()
        print(pwd)
        print(new_pwd)
        user = admin.Users.query.filter_by(username=username).first()
        if user and user.password == new_pwd:

            print("Ca marche", user)
            session['username'] = user.username
            session['role'] = user.role
            return redirect(url_for('show_all'))
        else:
            print("echec")
            return render_template('login.html',msg='Acces Interdits')
    else:
        return render_template('login.html')

def sendMail(msg_subject,msg_body):
    destinataire = []
    for user in users.Newsletter.query.all():
        destinataire.append(f"{user}")
    msg = Message(msg_subject, sender='no-reply@variationstore.fr',recipients=destinataire)
    msg.html = msg_body

    mail.send(msg)
