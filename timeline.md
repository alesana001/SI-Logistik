
#cd-timeline {
  position: relative;
  padding: 2em 0;
  margin-top: 2em;
  margin-bottom: 2em;
  /*overflow-y: scroll;*/
}
#cd-timeline::before {
  /* this is the vertical line */
  content: '';
  position: absolute;
  top: 0;
  left: 18px;
  height: 100%;
  width: 4px;
  background: #d7e4ed;
}

.cd-timeline-img {
        position: absolute;
    left: 10;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    box-shadow: 0 0 0 4px white, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
    
    top: 0px;
}

.out {
	background : #C03B44;
}

.in {
	background: #75ce66;
}


.cd-timeline-img.cd-picture {
    background: #75ce66;
}

.cd-timeline-img.cd-picture {
    background: #75ce66;
}

.cd-timeline-img h2 {
	    width: 209px;
    margin-left: 35px;
    font-weight: 100;
}

.cd-timeline-block {
    position: relative;
    margin: -2em 0;
    padding: 33px;
}

.cd-timeline-content {
    position: relative;
    margin-left: 60px;
    background: #eee;
    border-radius: 0.25em;
    padding: 1em;
    box-shadow: 0 3px 0 #d7e4ed;
        margin-left: 52px;
    margin-top: -32px;
}

.cssanimations .cd-timeline-img.is-hidden {
  visibility: hidden;
}
.cssanimations .cd-timeline-img.bounce-in {
  visibility: visible;
  animation: cd-bounce-1 0.6s;
}
 
@keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    transform: scale(0.5);
  }
 
  60% {
    opacity: 1;
    transform: scale(1.2);
  }
 
  100% {
    transform: scale(1);
  }
}




<section id="cd-timeline" >
	<div class="cd-timeline-block">
		<div class="cd-timeline-img in">
		<h2><b>20</b> </h2>
		</div> <!-- cd-timeline-img -->
	</div> <!-- cd-timeline-block -->
	<div class="cd-timeline-block">
		<div class="cd-timeline-img out">
		<h2><b>20 : </b> Kirim ke jatinangor</h2>
		</div> <!-- cd-timeline-img -->
	</div> <!-- cd-timeline-block -->
	<div class="cd-timeline-block">
		<div class="cd-timeline-img out">
		<h2><b>20 : </b> Pak wawan </h2>
		</div> <!-- cd-timeline-img -->
	</div> <!-- cd-timeline-block -->


