#include <iostream>
#include "Parent.h"

/**
 * メッセージを出力する
 */
void Parent::showMessage(){
	std::cout << "[message]" << this->message << std::endl;
}

