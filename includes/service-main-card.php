<style>
    .card-service {
      /* Añadir sombras para crear el efecto de "tarjeta" */
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 30%; /* Ajusta este valor según el espacio que quieras ocupar */
      margin: 10px; /* Espacio entre las tarjetas */
      text-align: center; /* Centrar el contenido */
    }

    /* Al pasar el ratón, añadir una sombra más profunda */
    .card-service:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    /* Añadir algo de padding dentro del contenedor de la tarjeta */
    .container-service {
      padding: 2px 16px;
    }

    .cards-container {
      display: flex;
      justify-content: space-around; /* Distribuye el espacio entre las tarjetas */
      flex-wrap: wrap; /* Permite que las tarjetas se ajusten en múltiples líneas si es necesario */
    }

    .card-service i {
      font-size: 50px; /* Tamaño del ícono */
      color: #4CAF50; /* Color del ícono, puedes personalizarlo */
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="cards-container">
    <div class="card-service">
      <i class="fas fa-exchange-alt"></i>
      <div class="container-service">
        <h4><b>Transferencia</b></h4>
        <p>Pagos</p>
      </div>
    </div>

    <div class="card-service">
      <i class="fas fa-home"></i>
      <div class="container-service">
        <h4><b>JDomicilio</b></h4>
        <p>Architect & Engineer</p>
      </div>
    </div>

    <div class="card-service">
      <i class="fas fa-prescription-bottle-alt"></i>
      <div class="container-service">
        <h4><b>Consultas</b></h4>
        <p>Farmaceutica</p>
      </div>
    </div>
  </div>