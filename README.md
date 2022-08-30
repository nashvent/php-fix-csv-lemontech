# php-fix-csv
Upload CSV

## Steps
Pasos seguidos para resolver el error
1. Ejecutar el contenedor usando docker-compose.yml para validar el funcionamiento descrito
`docker-compose up`
2. Luego realizar un calculo por separado usando excel (Libre Office Calc) para validar resultados de suma.
3. Se confirmo el error de calculo y se corrigio la parte de codigo que origino el error
4. Se refactorizo agregando una validación de indices 