//two functions (similar to php) query is  front end option for getting data from back end

const query = (options) => {
    return fetch('data/api.php'),{
        method: 'POST',
        body: JSON.stringify(options),
        headers:{'Cotent-Type':'application/json'}
    } .then(d=>d.json());
}

const templater = f => a =>
		(Array.isArray(a)?a:[a])
		.reduce((r,o,i,a)=>r+f(o,i,a),'');
	