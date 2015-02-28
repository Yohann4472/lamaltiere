<?php

class CategorieController { 
    public function supprimerCategorieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('LaMaltiereSiteWebMaltiereBundle:CategorieModele')->find($id);

        $em->remove($entity);
        $em->flush();

        return $this->chargerArticles(false);
    }
}
