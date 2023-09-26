import flask
import os

app = flask.Flask("Pratica 0")
port = int(os.getenv("PORT", 9099))

@app.route('/nome', methods=['POST'])
def mostrar_nome():
  return "Luiz Octávio\n"

app.run(host='localhost', port=port)