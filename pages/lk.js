const fromStorage = localStorage.getItem('result');
    if (fromStorage) {
      document.querySelector('.result').innerHTML = fromStorage;
    }

    const gou = localStorage.getItem('gou');
      document.querySelector('.results').style.display = 'inline-block';
      document.querySelector('.results').innerHTML = gou;