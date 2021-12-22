<?php

// SRP - Single Responsibily Principle - SOLID

class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2018-01-08';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

    // Função errada
    /* public function formatJson()
    {
        return json_encode($this->getContents());
    } */
}

class JsonFormatter
{
    public function formatReport(Report $report)
    {
        return json_encode($report->getContents());
    }
}
