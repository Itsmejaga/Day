

    public function LeadExcelUpload() {
        if (Session::get('loggedin_user_id')) {
            $data['getprj'] = $this->_lead->getPrjList();

            View::renderadmintemplate('HeaderNew', $data);
            View::render('AccUserLevel/LeadExcelUpload', $data);
            View::renderadmintemplate('Footer', $data);
        } else {
            Url::redirect('');
            exit;
        }
    }