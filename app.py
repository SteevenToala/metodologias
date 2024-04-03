from flask import Flask, redirect

app = Flask(__name__)

@app.route('/')
def hello_world():
    # Redireccionar al archivo PHP
    return redirect("archivo.php")

if __name__ == '__main__':
    app.run() 
