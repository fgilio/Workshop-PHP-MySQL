-- Listar todo de una tabla particular, de una bd en particular
SELECT * FROM usuarios;

-- Insertar usuario
INSERT INTO usuarios ( user_email, user_pass, user_clave_activacion, user_activado )
VALUES ( 'fiocchigabriel@gmail.com', 'blaBlaaaa', 'gdfiofhsdgfh65d', '0' );




SELECT * FROM notas;

INSERT INTO notas ( user_ID, nota_titulo, nota_contenido )
VALUES ( '0', 'Nota 0', 'Esta es la Nota 0, aquí comienza TODO.' );

UPDATE notas SET nota_titulo = 'Esta es la Nota 0', nota_contenido = 'Solo un ejemplo' WHERE nota_ID=7;

DELETE FROM notas WHERE nota_ID=8;

SELECT * FROM notas;