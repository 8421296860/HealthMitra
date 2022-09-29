function ubahMode(){
    const ubah=document.body;
    ubah.classList.toggle("dark");
}

document.addEventListener('colorSchemeChange',(e)=>{
    document.documentElement.style.setProperty(
        'color-scheme',
        e.detail.colorScheme
    );
}); 