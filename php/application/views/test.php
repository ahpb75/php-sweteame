<?php echo $this->input->post('username');
			echo "<br>";
            echo md5($this->input->post('password'));
            echo "<br>";
            echo $this->input->post('permissions');?>