from setuptools import setup

#Crear un paquete distribuible para potencia y redondeo.
setup(
    name="paqueteCalculos",
    version="1.0",
    description="Paquete de redondeo y potencia.",
    author="Paulo",
    author_email="petv1981@gmail.com",
    url="www.paulotoro.com",
    packages=["Calculos", "Calculos.redondeo_potencia"]
)