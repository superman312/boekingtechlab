<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/php/function.php';

$result = fetchmaterials($result);

if (mysqli_num_rows($result) > 0) {
	//output data from every row selected and inserts it into the container
	while ($row = mysqli_fetch_assoc($result)) {
		echo "
        <div class='item'>
            <h3>" . $row['name'] . "</h3>
            <img src='/assets/images/placeholder.png' alt=''>
            <div class='input-group'>
                <div class='input-button'>
                    <button type='button' class='circle left' data-quantity='minus' data-field='" . $row['id'] . "'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
                            <path d='M400 288h-352c-17.69 0-32-14.32-32-32.01s14.31-31.99 32-31.99h352c17.69 0 32 14.3 32 31.99S417.7 288 400 288z' />
                        </svg>
                    </button>
                </div>
                <input class='material-input' type='number' name='" . $row['id'] . "' step='1' min='0' max='" . $row['quantity_total'] . "' value='0'>
                <div class='input-button'>
                    <button type='button' class='circle right' data-quantity='plus' data-field='" . $row['id'] . "'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
                            <path d='M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z' />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        ";
	}
}
