// api/mpesa.js
module.exports = async (req, res) => {
  try {
    // Sua lógica de integração com o Mpesa aqui
    res.status(200).json({
      message: 'Integração com Mpesa funcionando!',
    });
  } catch (error) {
    res.status(500).json({ error: 'Erro ao processar a solicitação' });
  }
};
