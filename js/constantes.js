// js/constantes.js

const products = [
    {id: "m-1", img: "images/1.png", name: "Paracetamol", price: "$5.00", description: "Analgésico y antipirético, eficaz para reducir la fiebre y aliviar dolores leves.", stars: 4.5, reviews: 120 },
    {id: "m-2", img: "images/2.png", name: "Ibuprofeno", price: "$6.50", description: "Antiinflamatorio no esteroideo, alivia el dolor, reduce la fiebre y disminuye la inflamación.", stars: 4, reviews: 250 },
    {id: "m-3", img: "images/3.png", name: "Amoxicilina", price: "$12.00", description: "Antibiótico de amplio espectro utilizado para tratar infecciones bacterianas.", stars: 5, reviews: 180 },
    {id: "m-4", img: "images/4.png", name: "Loratadina", price: "$8.00", description: "Antihistamínico para aliviar síntomas de alergias como estornudos, picazón y ojos llorosos.", stars: 4.5, reviews: 95 },
    {id: "m-5", img: "images/5.png", name: "Omeprazol", price: "$10.00", description: "Inhibidor de la bomba de protones, utilizado para tratar problemas de acidez estomacal.", stars: 4, reviews: 110 },
    {id: "m-6", img: "images/6.png", name: "Salbutamol", price: "$15.00", description: "Broncodilatador utilizado para aliviar los síntomas del asma y otras condiciones respiratorias.", stars: 5, reviews: 200 },
    {id: "m-7", img: "images/7.png", name: "Metformina", price: "$7.00", description: "Medicamento utilizado para el tratamiento de la diabetes tipo 2, ayuda a controlar los niveles de azúcar en la sangre.", stars: 4, reviews: 180 },
    {id: "m-8", img: "images/8.png", name: "Enalapril", price: "$9.00", description: "Inhibidor de la enzima convertidora de angiotensina, utilizado para tratar la hipertensión y la insuficiencia cardíaca.", stars: 4.5, reviews: 150 },
    {id: "m-9", img: "images/9.png", name: "Simvastatina", price: "$11.00", description: "Medicamento utilizado para reducir los niveles de colesterol y prevenir enfermedades cardiovasculares.", stars: 5, reviews: 230 },
    {id: "m-10", img: "images/10.png", name: "Furosemida", price: "$6.00", description: "Diurético utilizado para tratar la retención de líquidos y la hipertensión.", stars: 5, reviews: 190 },
    {id: "m-11", img: "images/11.png", name: "Ciprofloxacino", price: "$14.00", description: "Antibiótico de amplio espectro utilizado para tratar infecciones bacterianas graves.", stars: 4.5, reviews: 175 },
    {id: "m-12", img: "images/12.png", name: "Acetaminofén", price: "$4.00", description: "Analgésico y antipirético utilizado para aliviar el dolor leve y la fiebre.", stars: 4, reviews: 160 }
    
];
const marcas = [
    { name: 'Ensure', description: 'Suplemento nutricional', image: 'img/marca/ensure-logo1.png' },
    { name: 'Gentar', description: 'Medicamentos genéricos', image: 'img/marca/gentar-logo.png' },
    { name: 'Colgate', description: 'Cuidado dental', image: 'https://www.colgate.com/content/dam/cp-sites/oral-care/oral-care-center-relaunch/global/logos/colgate-smile-badge.svg' },
    { name: 'Gillette', description: 'Afeitado y cuidado personal', image: 'img/marca/gillette-logo.png' },
    { name: 'Menticol', description: 'Refrescante corporal', image: 'img/marca/menticol-logo.png' },
    { name: 'Tío Nacho', description: 'Cuidado capilar', image: 'img/marca/tio-nacho-logo.png' },
    { name: 'Cicatricure', description: 'Cuidado de la piel', image: 'img/marca/cicatricure-logo.png' },
    { name: 'Pedialyte', description: 'Hidratación oral', image: 'img/marca/pedialyte-logo.png' },
    { name: 'Neutrogena', description: 'Cuidado de la piel', image: 'img/marca/neutrogena-logo.png' },
    { name: 'Vick', description: 'Alivio respiratorio', image: 'img/marca/vick-logo.png' },
    { name: 'Pepto-Bismol', description: 'Alivio digestivo', image: 'img/marca/pepto-bismol-logo.png' },
    { name: 'Advil', description: 'Analgésico', image: 'img/marca/advil-logo.png' },
    { name: 'Tylenol', description: 'Analgésico y antitérmico', image: 'img/marca/tylenol-logo.png' },
    { name: 'Listerine', description: 'Enjuague bucal', image: 'img/marca/listerine-logo.png' },
    { name: 'Head & Shoulders', description: 'Cuidado capilar', image: 'img/marca/head-and-shoulders-logo.png' },
    { name: 'Pantene', description: 'Cuidado capilar', image: 'img/marca/pantene-logo.png' },
    { name: 'Oral-B', description: 'Cepillos y productos dentales', image: 'img/marca/oral-b-logo.png' },
    { name: 'Crest', description: 'Cuidado dental', image: 'img/marca/crest-logo.png' },
    { name: 'Bayer', description: 'Salud y bienestar', image: 'img/marca/bayer-logo.png' },
    { name: 'Johnson\'s', description: 'Cuidado del bebé', image: 'img/marca/johnsons-logo.png' },
    { name: 'Huggies', description: 'Pañales y toallitas', image: 'img/marca/huggies-logo.png' },
    { name: 'Kleenex', description: 'Pañuelos desechables', image: 'img/marca/kleenex-logo.png' },
    { name: 'Dove', description: 'Cuidado personal', image: 'img/marca/dove-logo.png' },
    { name: 'Axe', description: 'Fragancias y cuidado personal', image: 'img/marca/axe-logo.png' },
    { name: 'Rexona', description: 'Desodorantes y antitranspirantes', image: 'img/marca/rexona-logo.png' },
    { name: 'Nivea', description: 'Cuidado de la piel', image: 'img/marca/nivea-logo.png' },
    { name: 'La Roche-Posay', description: 'Cuidado dermatológico', image: 'img/marca/la-roche-posay-logo.png' },
    { name: 'Eucerin', description: 'Cuidado de la piel', image: 'img/marca/eucerin-logo.png' },
    { name: 'Vichy', description: 'Cuidado dermatológico', image: 'img/marca/vichy-logo.png' },
    { name: 'Cetaphil', description: 'Cuidado de la piel', image: 'img/marca/cetaphil-logo.png' }
];