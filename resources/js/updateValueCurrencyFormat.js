    const el = document.getElementById('disburseValue');
        el.addEventListener('change',() => {        
        var disburseValue = el.value;
        var result = disburseValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        el.value = result;
        console.log(el.value);
    });