<!--[if (gt IE 7)&(lt IE 10)]><ul><![endif]-->
<!--[if !(gt IE 7)&(lt IE 10)]><!--> <ul class="accordion"> <!--<![endif]-->
   <li <?php if ($active_page=="Inicio") echo " class='active'"; ?> id="inicio"><a href="/inicio"><span>Inicio</span></a></li>
   <li <?php if ($active_page=="nosotros") echo " class='active'"; ?>><a href="/nosotros"><span>La empresa</span></a></li>
   <li <?php if ($active_page=="productos") echo " class='active has-sub'"; elseif($active_page!=="productos") echo "class='has-sub'"?>><a><span>Productos</span></a>
      <ul>
         <li class="has-sub"><a href="#"><span>Bombas Sumergibles</span></a>
            <ul>
               <li><a href="/task"><span>Serie Task</span> </a></li>
               <li><a href="/max"><span>Serie Max</span> </a></li>
               <li><a href="/sigma"><span>Serie Sigma</span> </a></li>
            </ul>
         </li>
         <li><a href="/motores"><span>Motores Sumergibles</span></a></li>
         <li class="has-sub"><a href="#"><span>Bombas de Superficie</span></a>
         	<ul>
         		<li class="has-sub"><a href="#"><span>Uso Doméstico, Sistemas de Riego e Hidroneumáticos</span></a>
         			<ul>
		               <li><a href="/ap"><span>Serie AP</span> </a></li>
		               <li><a href="/fix"><span>Serie Fix</span> </a></li>
		               <li><a href="/step"><span>Serie Step</span> </a></li>
		               <li><a href="/aly"><span>Serie Aly</span> </a></li>
		            </ul>
         		</li>
         		<li class="boton"><a href="/loop"><span>Circuladora para Agua Caliente</span></a></li>
         		<li class="boton"><a href="/venus"><span>Para Hidromasaje</span></a></li>
         	</ul>
         </li>
         <li class="has-sub"><a href="#"><span>Bombas para Piscinas</span></a>
         	<ul>
         		<li><a href="/silver"><span>Serie Silver</span> </a></li>
            	<li><a href="/supra"><span>Serie Supra</span> </a></li>
         	</ul>
         </li>
         <li class="has-sub"><a href="#"><span>Presurizadores</span></a>
         	<ul>
         	    <li class="boton"><a href="/minismart"><span>Minismart</span></a></li>
         	    <li  class="boton"><a href="/preskit"><span>Una Bomba con Kit</span></a></li>
         	    <li  class="boton"><a href="/presurizadores"><span>Una Bomba con Tanque</span></a></li>
         	</ul>
         </li>
         <li class="has-sub"><a href="#"><span>Tanques</span></a>
         	<ul>
         		<li><a href="/tanqueshorizontales"><span>Horizontales</span> </a></li>
            	<li><a href="/tanquesverticales"><span>Verticales</span> </a></li>
         	</ul>
         </li>
      </ul>
   </li>
   <li <?php if ($active_page=="novedades") echo " class='active'"; ?>><a href="/novedades"><span>Nuevos productos</span></a></li>
   <li <?php if ($active_page=="contacto") echo " class='active'"; ?>><a href="/contacto"><span>Contacto</span></a></li>
</ul>