import jwt  from 'jsonwebtoken'
import fs from 'node:fs'

// const pet = {
//     id: 1,
//     name: 'Galletas',
//     type: 'Gato',
//     race:'Blanco',
//     age:12
// };
// const clavePrivada = fs.readFileSync('private.key', 'utf-8')
// const token= jwt.sign(pet, clavePrivada, {algorithm: 'RS256', expiresIn: '2h'})

// console.log(token);

const token = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwibmFtZSI6IkdhbGxldGFzIiwidHlwZSI6IkdhdG8iLCJyYWNlIjoiQmxhbmNvIiwiYWdlIjoxMiwiaWF0IjoxNzQ3MjY0Mzc4LCJleHAiOjE3NDcyNzE1Nzh9.esmK9VE8jZQTwEJD8Rt1xaEJ5QFHng6I0iWH31B05hIWzAYNgPsd3pP_Kevn5jTcdN-y8n33TTjA-NaPvbuYv9CZDlvnl6LBPHDRxA2WYzuVBQbnwaPjjLHEbYSeGXqntBmFmC-V1R-MkRSbV-5xdgTECPvZdwqubNtLfG-Mulu57tUfXtiDTQRODV-GbZnBDAkkfPrARNtZSlOBOSB04mu8ASwF8XKITahwfwYy-rhNP7JYiDW9I6DBTAPh1nPmOR80ePM6czR01ZXrQOQUQllUg6CbEMxTrTXDsKjA4LT2FiQk8SbJvpW3tcP_jjDlg5pftrJsx2uLpDkz-f_f8g'
const clavePublica = fs.readFileSync('public.key', 'utf-8');
jwt.verify(token, clavePublica, {algorithm: 'RS256'}, (error, decoded)=> {
    if (error){
        console.log('Errror ', error.message);
    }
    else{
        console.log(decoded);
    }
})