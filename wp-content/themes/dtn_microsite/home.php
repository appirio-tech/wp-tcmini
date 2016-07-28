<?php
/*
Template Name: Home
*/

?>
<?php get_header();?>
    <!-- Content Wrapper -->
<div id="homePage">
    <div id="contentWrapper">
      <div id="homeBanner">
        <div class="introContent">
			<?php				
			  //$page=get_page_by_path('challenge-details');
			  $homeBannerText = get_post_meta($post->ID, "Challenge Banner Text", true);
			  $allContest = get_post_meta($post->ID,'allcontestsURL', true);
			  if($homeBannerText != null) :
				echo apply_filters('the_content', $homeBannerText);
			  endif;?>
		</div>
      </div>
	 
	  <div id="videoOverview">
		 <!--	
			<?php
			$YoutubeID = get_post_meta($post->ID, "Video YouTube ID", true);
			$videoTitle =  get_post_meta($post->ID, "Video Title", true);
			$jsvideo =  ( $YoutubeID == '' ) ?"alert('Video is coming soon')":"popupYT('".$YoutubeID."','".$videoTitle."')";
			
			?>
			
			<a class="btnWatch" href="javascript:;" onclick="<?php echo $jsvideo;?>">Click here to watch a short video & learn more about <?php $videoTitle;?></a>
			<div class="clear intro">
				<?php
						echo get_post_meta($post->ID, "Video Intro Text", true);
					?>
			</div>
		-->	
	  </div>
	 
		<div id="interActive">
	  		<div id="interActiveList">
				<div class="interActiveListHeader">
					<h3>DTN Interactive Stack Elements</h3>
					<p>Click or mouseover any of the blocks below for more details.</p>
				</div>
				<div class="interActiveListContent">
					<div class="interActiveList">
						<div class="interActiveItem userApplicationItem">
							<span class="text">USER APPLICATION</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">An unlimited variety of user applications can utilize network service based on DTN. The only constraint is that the application must itself be tolerant of potentially long latencies in round-trip communications. Applications that distribute information as soon as it is known - without waiting for queries - and that can act on information they already have in hand - without waiting for responses to queries - are likely to be most successful in a DTN environment. Publish/subscribe architectures are highly delay-tolerant; client/server architectures are usually not.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						<div class="interActiveItem fileTransferItem">
							<span class="text">File Transfer</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">A delay-tolerant file transfer protocol has been standardized by the Consultative Committee for Space Data Systems (CCSDS): it's named 'CCSDS File Delivery Protocol' (CFDP). The details of the protocol are provided in CCSDS document 727.0-B-4.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						<div class="interActiveItem dtpcItem">
							<span class="text">DTPC (Delay-Tolerant Payload Conditioning)</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">Delay-Tolerant Payload Conditioning (DTPC) is a new DTN application service that is currently being standardized within the Consultative Committee for Space Data Systems (CCSDS). It performs several functions that need to be executed only at the original source and final destination of an end-to-end network path, rather than at the intermediate forwarders: user data aggregation and elision, end-to-end acknowledgment and retransmission, and data sequencing and gap detection. In some ways it's analogous to TCP, the Internet's Transmission Control Protocol.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						<div class="interActiveItem bpItem">
							<span class="text">Bundle Protocol (Intra-DTN Routing)</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">The Bundle Protocol (BP) is the core 'network protocol' of Delay-Tolerant Networking. It is analogous to IP, the Internet Protocol, but with some key differences: outbound data items ('bundles') are retained in local storage, rather than discarded, when the link to the next node in the end-to-end path is suspended, and the 'time to live' of a bundle is measured in seconds rather than in network 'hops'. The details of the protocol are provided in Internet RFC 5050.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						<div class="interActiveItem ltpItem">
							<span class="text">LTP (Retransmission)</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">Licklider Transmission Protocol (LTP) is an ARQ [Automatic Repeat-reQuest] system that ensures the delivery of bundles from one DTN node to another even if link service is intermittently suspended for hours or days and/or the nodes are separated by minutes or hours of signal propagation delay. The details of the protocol are provided in Internet RFCs 5325, 5326, and 5327.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						<div class="interActiveItem udpItem">
							<span class="text">UDP</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">LTP provides generalized delay-tolerant retransmission service between two DTN nodes - it's not limited to any single type of network link. For research and demonstration of LTP on Earth the most convenient underlying link service is UDP/IP.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						<div class="interActiveItem tcpItem">
							<span class="text">TCP (Retransmission)</span>
							<div class="tooltips">
								<div class="tooltipInner">
									<span class="tooltipText">DTN is designed to let a single end-to-end data exchange span all kinds of network environments, ranging from space links with signal propagation times measured in minutes to reliable Internet connections with round-trip latencies measured in milliseconds. For DTN communications over path segments served by the Internet, TCP is an excellent 'convergence layer' choice.</span>
									<span class="tooltipArrow"></span>
								</div>
							</div>
						</div>
						
						<div class="interActiveItem ipItem disabled">
							<span class="text">IP (Intra-Internet Routing)</span>
						</div>
						<div class="interActiveItem ethernetItem disabled">
							<span class="text">Ethernet, Wi-Fi, FDDI</span>
						</div>
						<div class="interActiveItem wireItem disabled">
							<span class="text">Wire, Fiber, R/F</span>
						</div>
						
					</div>
					<div class="sideNavInteractive">
						<div class="sideNavItem layerApplication">Application Layer</div>
						<div class="sideNavItem layerTransport">Transport Layer</div>
						<div class="sideNavItem layerNetwork">Network Layer</div>
						<div class="sideNavItem layerLink">Link Layer</div>
						<div class="sideNavItem layerPhysical">Physical Layer</div>
					</div>
				</div>
			</div>
	  		<div class="interActiveBottomBar"></div>
	  </div>
	  
	 <div id="contentArea" class="post">
               <div class="featuredBox registerBox">
				<div class="content">
					<?php
						echo get_post_meta($post->ID, "Box1 Text", true);
					?>
					
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($post->ID, "Box1 URL", true);?>"><span>Register Now</span></a>
			   </div>
			   
			   <div class="featuredBox learnBox">
				<div class="content">
					<?php
						echo get_post_meta($post->ID, "Box2 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($post->ID, "Box2 URL", true);?>"><span>Learn More About NTL</span></a>	
			   </div>
			   
			   <div class="featuredBox harvardBox">
				<div class="content">
					<?php
						echo get_post_meta($post->ID, "Box3 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($post->ID, "Box3 URL", true);?>"><span>Learn More About Harvard-NTL</span></a>	
			   </div>
			   <div class="clear"></div>
			   <?php the_content();?>
            </div>
	  
    </div>
</div>
<?php get_footer(); ?>