# Travel Custom Map

Mapa interactivo de destinos turísticos, desarrollado con HTML, Leaflet, Bootstrap, Font Awesome y CapacitorJS.

## 🗺️ Características

- Visualización de puntos turísticos con información detallada.
- Cálculo de rutas a pie o en bicicleta.
- Compatible con dispositivos móviles (diseño responsive).
- Preparado para compilar como app Android mediante Capacitor.

## ⚙️ Requisitos

- Node.js >= 20.x
- npm >= 9.x
- Android Studio (solo si se desea compilar para Android)

## 🚀 Instalación

```bash
# Clonar el repositorio
git clone https://github.com/gitcalde/travelcustommap.git
cd travelcustommap

# Instalar dependencias
npm install

# Inicializar Capacitor (ya hecho una vez, pero puedes repetir si es necesario)
npx cap init

# Añadir plataforma Android
npx cap add android
