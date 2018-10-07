<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Bogachev Vitaliy CV</title>
	<meta charset="utf-8">
    <meta name="description" content="CV">
    <meta name="keywords" content="CV">
    <meta name="author" content="Scorpion">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css" />
	<!-- JS -->
	<script src="semantic/dist/semantic.min.js"></script>
	<script src="js/jquery/jquery-3.1.0.min.js"></script>
	<script>
		function showHide(idDiv) {
			$('#'+idDiv).toggle('fast');
		}
		function recShow(idModal) {
			$('#'+idModal).show('fast');
		}
		function recClose(idModal) {
			$('#'+idModal).hide('fast');
		}
	</script>
</head>
<body>
	<!-- menu -->
	<div id="menu" class="ui left fixed vertical menu inverted">
  		<div class="ui inverted segment">
    		<button class="ui inverted basic button icon" onClick="showHide('menu');"><i class="content icon"></i></button>
  		</div>
  		<a class="item" href="#welcome">Welcome</a>
		<a class="item" href="#work">Working Experience</a>
		<a class="item" href="#cert">Certificates</a>
		<a class="item" href="#edu">Education</a>
	</div>
	<div class="pusher">
		<!-- Site content !-->
		<!-- menu button -->
		<button class="ui inverted button mesto icon" onClick="showHide('menu');"><i class="content icon"></i></button>
		<!-- WELCOME -->
		<div class="back-welcome" id="welcome">
			<div class="ui two column grid left aligned container">
				<div class="column w-200">
					<div class="ui alig-rig">
						<img src="img/avatar.jpg" class="ui medium circular middle aligned image" />
					</div>
				</div>
				<div class="column">
					<h1 class="ui header yellow">Bogachev Vitaliy</h1>
					<h2 class="ui header yellow">Senior System Administrator</h2>
					<a href="https://www.linkedin.com/in/lordsith/" target="_blank"><i class="big linkedin icon blue"></i></a>
					<a href="https://github.com/scorpionukr" target="_blank"><i class="big github icon blue"></i></a>
					<a href="https://www.instagram.com/darth.scorpion/" target="_blank"><i class="big instagram icon blue"></i></a>
					<a href="skype:darth-scorpion" target="_blank"><i class="big skype icon blue"></i></a>
				</div>
			</div>
		</div>
		<!-- WORK -->
		<div class="ui two column grid center aligned container marg-work" id="work">
			<div class="column">
				<div class="ui alig-rig">
					<h2 class="ui header yellow">Experience</h2>
				</div>
			</div>
			<div class="column">
			</div>
		</div>
		<!-- TKL -->
		<div class="ui two column grid center aligned container marg-work">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/tkl-logo-2.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui red message">
					<h3 class="ui header">Turnkey-Lender</h3>
					<b>Senior System Administrator</b><br />
					May 2018 – September 2018<br />
					Kharkiv, Ukraine<br />
					<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Windows Server & Linux</li>
						<li>Configuration and support high-load servers</li>
						<li>Setup replication Master-Slave and Master-Master</li>
						<li>Configuring and support web servers and databases</li>
						<li>Configuration backups</li>
						<li>Configuring tunnels for remote client servers</li>
						<li>VMWare server virtualization</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Support for developers and QA</li>
					</ul>
					<table class="ui red table disp-none" id="tkl-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: CentOS, Ubuntu;<br />
									Windows Server: 2016, 2012;<br />
									Windows Desktop: 10, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell, PowerShell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Ubiquiti, D-Link, HP ProLiant</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>VMWare ESXi, vSphere, iptables, DHCP, Apache2, MySQL, MS SQL Server, Exim, Nagios, IPSec, L2TP, Radius, VLAN, Jenkins, git, Office365, Atlassian(JIRA, Confluence, BitBucket)</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, MS Azure</td>
							</tr>
							<tr>
								<td><b>VOIP</b></td>
								<td>3CX Asterisk system</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted red button" onclick="showHide('tkl-table');">More</button>
				</div>
			</div>
		</div>
		<!-- SVITLA -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/svitla-logo.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui orange message">
					<h3 class="ui header">Svitla</h3>
					<b>Senior System Administrator</b><br />
					November 2015 – May 2018<br />
					Kharkiv, Ukraine<br />
					<br />
					<b>Responsibility:</b><br />
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Configuration and support high-load servers</li>
						<li>Setup replication Master-Slave and Master-Master</li>
						<li>Configuring and support web servers and databases</li>
						<li>Configuration backups</li>
						<li>Migration applications from Parse® to Heroku®</li>
						<li>Application support to the Parse® and Heroku® platform</li>
						<li>Configuring tunnels for remote client servers</li>
						<li>Xen server virtualization</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Support for developers and QA</li>
					</ul>
					<table class="ui orange table disp-none" id="svitla-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted orange button" onclick="showHide('svitla-table');">More</button>
				</div>
			</div>
		</div>
		<!-- EPICALL -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/epicall-logo.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui green message">
					<h3 class="ui header">Epicall</h3>
					<b>Senior System Administrator</b><br />
					September 2013 – June 2015<br />
					Kharkiv, Ukraine<br />
					<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Configuring Asterisk PBX; Dialplan, Routing, IVR, Callback</li>
						<li>Development and implementation of their own CRM system</li>
						<li>Configuration and support high-load servers</li>
						<li>Setup replication Master-Slave</li>
						<li>Configuring and support web servers and databases</li>
						<li>Configuration backups</li>
						<li>Configuring tunnels for remote client servers</li>
						<li>Xen server virtualization</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Support for employees</li>
					</ul>
					<table class="ui green table disp-none" id="epicall-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted green button" onclick="showHide('epicall-table');">More</button>
				</div>
			</div>
		</div>
		<!-- KOSTART -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/kostart-logo.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui violet message">
					<h3 class="ui header">KoStart</h3>
					<b>Senior System Administrator</b><br />
					2015 – 2015<br />
					Kharkiv, Ukraine<br />
					<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Configuring and support web servers and databases</li>
						<li>Development and support of sites</li>
						<li>Configuration backups</li>
						<li>Support Bitrix® CRM system</li>
						<li>Xen server virtualization</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Support for employees</li>
					</ul>
					<table class="ui violet table disp-none" id="kostart-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted violet button" onclick="showHide('kostart-table');">More</button>
				</div>
			</div>
		</div>
		<!-- YALTA -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/yalta-logo.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui olive message">
					<h3 class="ui header">Yalta TV</h3>
					<b>System Administrator</b><br />
					March 2013 – August 2013<br />
					Yalta, Ukraine<br />
					<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Setting up a network L2/L3 switches and routers</li>
						<li>Designing the network topology</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Configuration backups</li>
						<li>Support ABills® billing system</li>
						<li>Configuring and support web servers and databases</li>
						<li>Xen server virtualization</li>
						<li>Support for employees</li>
					</ul>
					<table class="ui olive table disp-none" id="yalta-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted olive button" onclick="showHide('yalta-table');">More</button>
				</div>
			</div>
		</div>
		<!-- IPSYSTEMS -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/ipsystems-logo.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui blue message">
					<h3 class="ui header">IpSystmes</h3>
					<b>System Administrator</b><br />
					October 2011 – February 2013
					Kharkiv, Ukraine<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Setting up a network L2/L3 switches and routers</li>
						<li>Designing the network topology</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Configuration backups</li>
						<li>Configuring and support web servers and databases</li>
						<li>Support for employees</li>
					</ul>
					<table class="ui blue table disp-none" id="ipsystems-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted blue button" onclick="showHide('ipsystems-table');">More</button>
				</div>
			</div>
		</div>
		<!-- TRIOLAN -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/triolan-logo.jpg" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui red message">
					<h3 class="ui header">Triolan</h3>
					<b>System Administrator</b><br />
					September 2009 – December 2010
					Kharkiv, Ukraine<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Setting up a network L2/L3 switches and routers</li>
						<li>Designing the network topology</li>
						<li>Setting the company's internal LAN and WiFi</li>
						<li>Configuration backups</li>
						<li>Configuring and support web servers and databases</li>
						<li>Support for employees</li>
					</ul>
					<table class="ui red table disp-none" id="triolan-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted red button" onclick="showHide('triolan-table');">More</button>
				</div>
			</div>
		</div>
		<!-- IPSYSTEMS -->
		<div class="ui two column grid center aligned container">
			<div class="column w-200">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/ipsystems-logo.png" class="ui small circular middle aligned image company-logo" />
					</a>
				</div>
			</div>
			<div class="column left aligned">
				<div class="ui blue message">
					<h3 class="ui header">IpSystems</h3>
					<b>Mounter</b><br />
					June 2008 – August 2009<br />
					Kharkiv, Ukraine<br />
					<b>Responsibility:</b>
					<ul class="ui list">
						<li>Configuration and optimization servers based on Linux</li>
						<li>Setting up a network L2/L3 switches and routers</li>
						<li>Designing the network topology</li>
						<li>Setting the company's internal LAN and WiFi</li>
					</ul>
					<table class="ui blue table disp-none" id="ipsystems2-table">
						<thead>
							<tr>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><b>OS</b></td>
								<td>
									Linux: RedHat, CentOS, Ubuntu;<br />
									Windows Server: 2016;<br />
									Windows Desktop: 10, 8, 7;<br />
								</td>
							</tr>
							<tr>
								<td><b>Scripts</b></td>
								<td>Bash, Shell</td>
							</tr>
							<tr>
								<td><b>Hardware</b></td>
								<td>Cisco, Mikrotik, Ubiquiti, D-Link</td>
							</tr>
							<tr>
								<td><b>Software</b></td>
								<td>Xen, iptables, DHCP, Apache2, nginx, MySQL, Nagios, IPSec, VLAN, Jenkins, Puppet, git, Postfix, Dovecot, vsFTPd PHP 5.6 or 7, L2TP, PPTP, Docker, npm, MongoDB, Zoho CRM</td>
							</tr>
							<tr>
								<td><b>Cloud</b></td>
								<td>Amazon Web Services, Heroku, GSuite</td>
							</tr>
						</tbody>
					</table>
					<button class="ui inverted blue button" onclick="showHide('ipsystems2-table');">More</button>
				</div>
			</div>
		</div>
		<!-- Certificates -->
		<div class="ui two column grid center aligned container marg-work" id="cert">
			<div class="column">
				<div class="ui alig-rig">
					<h2 class="ui header yellow">Certificates</h2>
				</div>
			</div>
			<div class="column">
			</div>
		</div>
		<!-- Education -->
		<div class="ui two column grid center aligned container marg-work" id="edu">
			<div class="column">
				<div class="ui alig-rig">
					<h2 class="ui header yellow">Education</h2>
				</div>
			</div>
			<div class="column">
			</div>
		</div>
		<div class="ui grid three column">
			<div class="row">
				<div class="column"></div>
				<div class="column left aligned">
					<div class="ui blue message">
						<h3 class="ui header">Kharkov National University of Radioelectronics</h3>
						<b>Bachelor</b><br />
						2008 – 2012<br />
						Kharkiv, Ukraine<br />
					</div>
				</div>
				<div class="column"></div>
			</div>
		</div>
	</div>
</body>
</html>