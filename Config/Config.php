<?php 
	const BASE_URL = "http://localhost/loschapines";
	// const BASE_URL = "https://loschapines.com/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "los_chapines_store";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AbB9j7pMXqA1iYpu8uCEdNP5SpYooDPxAhzJd8Fe_S7Scot5FPbaLixCyMcggfMHbVukcOTL71JIwIPF";
	const SECRET = "ELZELN5SryE1Dv_ALyVP7VJl1SsX8aCL_pS_Va7vO-9p-rH3D4Ockmlgxij5d4KF-hajeFx20g6Q8WnX";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Los Charros";
	const EMAIL_REMITENTE = "loschapines.store@gmail.com";
	const NOMBRE_EMPESA = "Los Chapines";
	const WEB_EMPRESA = "www.loschapines.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "LosChapines";

	//Datos Empresa
	const DIRECCION = "Gualan Zacapa, Guatemala";
	const TELEMPRESA = "+(502)45187623";
	const WHATSAPP = "+50245187623";
	const EMAIL_EMPRESA = "loschapines.store@gmail.com";
	const EMAIL_PEDIDOS = "loschapines.store@gmail.com"; 
	const EMAIL_SUSCRIPCION = "loschapines.store@gmail.com";
	const EMAIL_CONTACTO = "loschapines.store@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'jordyvega';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 25;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/jordy vega";
	const INSTAGRAM = "https://www.instagram.com/jordy_vega3/";
	

 ?>