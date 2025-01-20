const express = require('express');
const MpesaAPI = require('./MpesaAPI');  // Importando o arquivo Mpesa.js
const config = require('./config');     // Importando as configurações

const app = express();
const port = 3000;

app.get('/pay', async (req, res) => {
  const { phoneNumber, amount } = req.query;

  if (!phoneNumber || !amount) {
    return res.status(400).json({ error: 'Phone number and amount are required' });
  }

  try {
    const paymentResponse = await MpesaAPI.initiatePayment(phoneNumber, amount);
    return res.json(paymentResponse);
  } catch (error) {
    return res.status(500).json({ error: 'Payment initiation failed' });
  }
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
