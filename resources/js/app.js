require('./bootstrap');

require('alpinejs');

/**
 *
 * @param _url : URL route of laravel
 * @param _child : Item dependence by change results
 */
window.resolveDependenciesSelect= (_url,_child)=>{
    fetch(_url, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        method: 'POST'
    })
        .then(response => response.json())
        .then((data) => {
            document.getElementById(_child).innerHTML = '<option>- Select one item -</option>'
            for (let idx in data) {
                document.getElementById(_child).innerHTML += `<option value="${idx}">${data[idx]}</option>`;
            }
        }).catch(function (error) {
        console.log(error);
    });
}

window.sendToServer= async(_url,_method,data)=>{
   return fetch(_url, {
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        method:_method,
       body:data
    })
        .then(response => response.json())
        .catch(function (error) {
          alert('Not process information user');
    });
}

  window.transformSendUpdate=async(_id)=>{
    let items={'name':document.getElementById('n0_'+_id).value,
        'phone':document.getElementById('n1_'+_id).value,
        'birthdate':document.getElementById('n2_'+_id).value,
        'city_id':document.getElementById('ci_'+_id).value};

    const rsp= await sendToServer('/users-update/'+_id,'POST',JSON.stringify(items));
    if(rsp!==undefined){
        alert('Data update success');
        transformCancelEdit(_id)
    }

}

window.transformCancelEdit=(_id)=>{
    const item=document.getElementById('tr_'+_id)
    item.getElementsByTagName('td')[1].innerHTML=document.getElementById('n0_'+_id).value;
    item.getElementsByTagName('td')[4].innerHTML=document.getElementById('n1_'+_id).value;

    item.getElementsByTagName('td')[5].innerHTML='<span>'+document.getElementById('n2_'+_id).value+'</span>';

    const ct =document.getElementById('ct_'+_id);
    item.getElementsByTagName('td')[6].innerHTML=ct.options[ct.selectedIndex].text;
    const st =document.getElementById('st_'+_id);
    item.getElementsByTagName('td')[7].innerHTML=st.options[st.selectedIndex].text;
    const ci =document.getElementById('ci_'+_id);
    item.getElementsByTagName('td')[8].innerHTML=ci.options[ci.selectedIndex].text;

    document.getElementById("btEditCancel_"+_id).style.display='none'
    document.getElementById("btEditUpdate_"+_id).style.display='none'
    document.getElementById("btEditTransform_"+_id).style.display='block'
}

window.transformEdit=async(_id)=>{
    const item=document.getElementById('tr_'+_id)
    item.getElementsByTagName('td')[1].innerHTML='<input id="n0_'+_id+'"  class="bg-indigo-100 py-1 w-custom" value="'+item.getElementsByTagName('td')[1].innerHTML.trim()+'"/>'
    item.getElementsByTagName('td')[4].innerHTML='<input id="n1_'+_id+'" class="bg-indigo-100 py-1 w-custom"  value="'+item.getElementsByTagName('td')[4].innerHTML.trim()+'"/>'
    item.getElementsByTagName('td')[5].innerHTML='<input id="n2_'+_id+'" type="date" class="bg-indigo-100  py-1 w-custom" value="'+item.getElementsByTagName('td')[5].getElementsByTagName('span')[0].innerHTML.trim()+'"/>'
    const items= await sendToServer('/paint-select-in-grid/'+_id,'POST',{})
    item.getElementsByTagName('td')[6].innerHTML='<select id="ct_'+_id+'" class="bg-indigo-100  py-1 w-custom">'+items.countries+'</select>';
    item.getElementsByTagName('td')[7].innerHTML='<select id="st_'+_id+'"  class="bg-indigo-100  py-1 w-custom">'+items.states+'</select>';
    item.getElementsByTagName('td')[8].innerHTML='<select id="ci_'+_id+'"  class="bg-indigo-100  py-1 w-custom" >'+items.cities+'</select>';

    document.getElementById("ct_"+_id).addEventListener('change', function () {
        resolveDependenciesSelect('/dependencies/states/' + this.value,'st_'+_id)
        document.getElementById('ci_'+_id).innerHTML = '<option>- Select one item -</option>'
    });
    document.getElementById("st_"+_id).addEventListener('change', function () {
        resolveDependenciesSelect('/dependencies/cities/' + this.value,'ci_'+_id)
    });
    document.getElementById("btEditCancel_"+_id).style.display='block'
    document.getElementById("btEditUpdate_"+_id).style.display='block'
    document.getElementById("btEditTransform_"+_id).style.display='none'

}