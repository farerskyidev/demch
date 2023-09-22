<?php $gradientId = rand();  ?>
<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle id="circle1" cx="10.5" cy="10.5" r="10" stroke="#222744"/>
    <circle id="circle2" cx="10.5" cy="10.5" r="4.75" fill="url(#<?php echo $gradientId; ?>)" stroke="#222744"/>
    <defs>
        <linearGradient id="<?php echo $gradientId; ?>" x1="11.1825" y1="20.0025" x2="11.1825" y2="0.7875" gradientUnits="userSpaceOnUse">
            <stop stop-color="#81B041"/>
            <stop offset="1" stop-color="#D7E406"/>
        </linearGradient>
    </defs>
</svg>