
async function RequestData({ url, options, sucess, showError }) {
  try {
    const response = await fetch(url, options);
    const data = await response.json();
    sucess(data);
  } catch (error) {
    showError(error);
  }
}

export default RequestData;