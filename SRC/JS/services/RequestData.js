
async function RequestData({ url, method, header, typeOf }) {
  try {
    const response = await fetch(url, {
      method: method,
      headers: header,
    });
    const data =
      typeOf === "json" ? await response.json() : await response.text();
    return data;
  } catch (error) {
    console.log(error);
  }
}

export default RequestData;