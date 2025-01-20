onst fetch = require('node-fetch'); // Você pode usar o pacote fetch para fazer requisições HTTP

module.exports = async (req, res) => {
  const url = 'https://api.safaricom.co.ke/mpesa/';
  const headers = {
    'Authorization': 'Bearer YOUR_ACCESS_TOKEN', // Substitua com seu token
    'Content-Type': 'application/json'
  };

  const body = JSON.stringify({
    "Shortcode": "your_shortcode",
    "LipaNaMpesaOnlineShortcode": "your_shortcode",
    "PhoneNumber": "your_phone_number",
    "Amount": 100, // Substitua com o valor desejado
  });

  try {
    const response = await fetch(url, {
      method: 'POST',
      headers: headers,
      body: body,
    });

    const data = await response.json();
    res.status(200).json(data);
  } catch (error) {
    res.status(500).json({ message: 'Erro ao fazer pagamento via Mpesa', error: error.message });
  }
};
