# Documentacion (stripe-php)

## ¿Qué es una librería?
Una librería es un conjunto de código ya hecho que te facilita tareas comunes.  
Se puede pensar como un “módulo reutilizable” que otros programadores desarrollaron para que vos no tengas que hacerlo desde cero.

**Ejemplo:**
- `stripe-php` → te da funciones para crear pagos, clientes, suscripciones, etc.  
- `phpmailer` → te da funciones para enviar emails fácilmente.

---

## ¿Qué es Composer?
Composer es un gestor de dependencias para PHP.  
Es una herramienta que te permite instalar y administrar librerías externas (código hecho por otros desarrolladores que vos podés reutilizar en tus proyectos).

En vez de programar toda la conexión con la API a mano, usás Composer para instalar la librería oficial de Stripe:

```bash
composer require stripe/stripe-php
