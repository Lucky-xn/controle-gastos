
export function userRequest(url, method = 'GET') {
  const api = import.meta.env.VITE_API_URL;
  const token = localStorage.getItem('token');

  async function makeRequest(body) {
    const headers = {
      'Content-Type': 'application/json',
    };

    if (token) {
      headers['Authorization'] = `Barer ${token}`;
    }

    const response = await fetch(`${api}${url}`, {
      method,
      headers,
      body: body ? JSON.stringify(body) : undefined,
    });

    const contentType = response.headers.get('Content-Type');
    const data = contentType && contentType.includes('application/json')
      ? await response.json() : await response.text();

      if (!response.ok) {
        throw new Error(data?.message || 'Request failed');
      }

    return data;
  }

  return {
    makeRequest,
  }
}