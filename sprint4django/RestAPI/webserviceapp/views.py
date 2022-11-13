from django.shortcuts import render
from django.http import HttpResponse, JsonResponse

from .models import Tpeliculas

def pagina_de_prueba(request):
	return HttpResponse("<h1>Hola caracola</h1>");

def devolver_peliculas (request):
	lista = Tpeliculas.objects.all()
	respuesta_final =[]
	for fila_sql in lista:
		diccionario = {}
		diccionario['id'] = fila_sql.id
		diccionario['nombre'] = fila_sql.nombre
		diccionario['director'] = fila_sql.director
		diccionario['genero'] = fila_sql.genero
		diccionario['url_imagen'] = fila_sql.url_imagen
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False)

